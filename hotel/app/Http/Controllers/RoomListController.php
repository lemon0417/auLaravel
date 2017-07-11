<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomListModel;

class RoomListController extends Controller
{
    private $modal = [
        [
            'type' => 'add-room-modal',
            'title' => '新增房間',
            'submit' => '新增'
        ],
        [
            'type' => 'mod-room-modal',
            'title' => '修改房間',
            'submit' => '修改'
        ]
    ];

    public function show() {
        $rooms = RoomListModel::all();

        return view('admin/room_list', [
            'modals' => $this -> modal,
            'rooms' => $rooms
        ]);
    }

    public function add(Request $request) {
        $data = $request->all();

        RoomListModel::create([
            'title' => $data['title'],
            'type' => $data['type'],
            'current' => 0,
            'total' => $data['total'],
            'price' => $data['price'],
        ]);

        return response() -> json([
            'type' => 'success'
        ]);
    }
}