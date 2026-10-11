@extends('layouts.app')

@section('title', 'Thêm sinh viên')

@section('content')
<h2>Thêm sinh viên mới</h2>

<x-card title="Thông tin sinh viên">
    <form method="post" action="{{ url('/students') }}">
        @csrf

        <div class="field">
            <label for="name">Họ tên</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}">
            @error('name')<div class="error">{{ $message }}</div>@enderror
        </div>

        <div class="field">
            <label for="email">Email</label>
            <input id="email" type="text" name="email" value="{{ old('email') }}">
            @error('email')<div class="error">{{ $message }}</div>@enderror
        </div>

        <div class="field">
            <label for="age">Tuổi</label>
            <input id="age" type="text" name="age" value="{{ old('age') }}">
            @error('age')<div class="error">{{ $message }}</div>@enderror
        </div>

        <div class="field">
            <label for="gender">Giới tính</label>
            <select id="gender" name="gender">
                <option value="">-- Chọn --</option>
                <option value="male" @selected(old('gender') === 'male')>Nam</option>
                <option value="female" @selected(old('gender') === 'female')>Nữ</option>
            </select>
            @error('gender')<div class="error">{{ $message }}</div>@enderror
        </div>

        <div class="field">
            <label for="class_name">Lớp</label>
            <input id="class_name" type="text" name="class_name" value="{{ old('class_name') }}">
            @error('class_name')<div class="error">{{ $message }}</div>@enderror
        </div>

        <button type="submit">Lưu</button>
    </form>
</x-card>
@endsection
