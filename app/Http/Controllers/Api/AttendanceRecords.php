<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AttendanceRecord;
use App\Models\Absences;
use App\Models\BreaktimeLogs;
use App\Models\OvertimeLogs;
use App\Models\Atte;


class AttendanceRecords extends Controller
{
    public function index()
    {

        $AttendanceRecords = AttendanceRecord::with('absence','break','overtime','attendanceStatus')->get();

        return response()->json([
            'attendance_records' => $AttendanceRecords
        ]);
    }

    public function show($id)
    {
        $AttendanceRecord = AttendanceRecord::where('Attendance_id', $id)->first();

        if (!$AttendanceRecord) {
            return response()->json(['message' => 'Log not found'], 404);
        }
    
        return response()->json($AttendanceRecord);
    }

    public function store(Request $request)
    {
        $item = AttendanceRecord::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $AttendanceRecord = AttendanceRecord::where('Attendance_id', $id)->first();
        if (!$AttendanceRecord) {
            return response()->json(['message' => 'Log not found'], 404);
        }
        
         $AttendanceRecord->update($request->all());
            return response()->json($AttendanceRecord, 200);
    }

    public function destroy($id)

    {
        $AttendanceRecord = AttendanceRecord::where('Attendance_id', $id)->first();

        if (!$AttendanceRecord) {
            return response()->json(['message' => 'Log not found'], 404);
        }
    
        $AttendanceRecord->delete();

        return response()->json(['message' => 'Log deleted successfully'], 200);
    }
}
