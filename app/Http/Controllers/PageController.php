<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        $labs = [
            'Buổi 1: Cài đặt môi trường, khởi tạo dự án Laravel 12',
            'Buổi 2: Route cơ bản và ôn tập PHP',
            'Buổi 3: Controller và Blade (layout, vòng lặp)',
            'Buổi 4: Model, Migration, Factory, Seeder và Eloquent',
            'Buổi 5: So sánh dữ liệu mảng tĩnh và cơ sở dữ liệu',
            'Buổi 6: Blade directive hiện đại và Component',
            'Buổi 7: Form, CSRF, Validation và kiểm thử tự động',
        ];

        $objectives = [
            'Hiểu vai trò của framework và kiến trúc MVC trong Laravel.',
            'Cài đặt, cấu hình và chạy được dự án Laravel 12.',
            'Nắm vững cấu trúc thư mục và các thành phần cơ bản: Route, Controller, View, Model.',
            'Ôn tập PHP, OOP và MySQL thông qua Eloquent ORM.',
        ];

        $outcomes = [
            'Xây dựng được ứng dụng web nhỏ theo mô hình MVC.',
            'Thao tác cơ sở dữ liệu bằng Migration, Factory, Seeder và Eloquent.',
            'Tổ chức giao diện bằng Blade layout, partial và component.',
            'Kiểm tra dữ liệu đầu vào bằng Validation và bảo vệ form bằng CSRF.',
        ];

        return view('pages.about', compact('labs', 'objectives', 'outcomes'));
    }
}
