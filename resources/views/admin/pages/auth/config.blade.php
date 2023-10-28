@extends('admin.master')
@section('title', "Thông tin cá nhân")
@section('style')
    <style>
        /* Tab Links */
        .tabs {
            display: flex;
        }

        .tablinks {
            border: none;
            outline: none;
            cursor: pointer;
            width: 100%;
            padding: 1rem;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 600;
            transition: 0.2s ease;
        }

        .tablinks:hover {
            background: green;
            color: #fff;
        }

        /* Tab active */
        .tablinks.active {
            background: #4858cb;
            color: #fff;
        }

        /* tab content */
        .tabcontent {
            display: none;
        }

        /* Text*/
        .tabcontent p {
            color: #333;
            font-size: 16px;
        }

        /* tab content active */
        .tabcontent.active {
            display: block;
        }
    </style>
@endsection
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thông tin cấu hình</h1>
    </div>

    <div class="card shadow mb-4 col-12">
        <div class="card-body">
            <div class="table-responsive">
                <!-- Tab links -->
                <div class="tabs">
                    @foreach(config('setup') as $key => $config)
                        <button class="tablinks {{ $loop->first ? 'active' : '' }}"
                                data-electronic="{{ $key }}">{{ $key }}</button>
                    @endforeach
                </div>

                <!-- Tab content -->
                <div class="wrapper_tabcontent">
                    @foreach(config('setup') as $key => $config)
                        <div id="{{ $key }}" class="tabcontent {{ $loop->first ? 'active' : '' }}">
                            @foreach($config as $input)
                                @php $getConfig = configHelper($input["key"]) @endphp
                                <br>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="{{ $input["key"] }}">{{ $input["key"] }}</label>
                                            <div class="d-flex justify-content-between">
                                                <input type="hidden" value="{{ $input['key'] }}">
                                                <input type="hidden" value="{{ $input['type'] }}">
                                                <input type="hidden" value="{{ $key }}">
                                                <input type="{{ $input['type'] }}" class="form-control col-11"
                                                       id="{{ $input["key"] }}" value="{{ $getConfig->value ?? '' }}">
                                                <button type="button" class="btn btn-primary"
                                                        onclick="updateConfig(this, {{$getConfig->id ?? 0}})">Cập nhật
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javascript')




    <script>

        var tabLinks = document.querySelectorAll(".tablinks");
        var tabContent = document.querySelectorAll(".tabcontent");

        tabLinks.forEach(function (el) {
            el.addEventListener("click", openTabs);
        });

        function openTabs(el) {
            var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
            var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

            tabContent.forEach(function (el) {
                el.classList.remove("active");
            });

            tabLinks.forEach(function (el) {
                el.classList.remove("active");
            });

            document.querySelector("#" + electronic).classList.add("active");

            btn.classList.add("active");
        }

        function updateConfig(button, id) {
            var url = `{{ route('cp-admin.updateConfig', ['id' => 0]) }}` + id;
            var card = $(button).closest('.card');
            var hiddenInputs = card.find('input[type="hidden"]');
            var valueInput = card.find('input.form-control.col-11').get(0); // Lấy DOM element thay vì giá trị input
            var postData = new FormData();
            postData.append('key', hiddenInputs.eq(0).val());
            postData.append('type', hiddenInputs.eq(1).val());
            postData.append('group', hiddenInputs.eq(2).val());
            postData.append('_token', `{{ csrf_token() }}`);
            if (hiddenInputs.eq(1).val() == 'file') {
                if (valueInput && valueInput.files.length > 0) {
                    postData.append('value', valueInput.files[0]);
                } else {
                    swal("vui lòng chọn hình ảnh", {
                        icon: "error",
                    });
                    return false;
                }
            } else {
                postData.append('value', valueInput ? valueInput.value : null);
            }

            $.ajax({
                type: "POST",
                url: url,
                data: postData,
                processData: false, // Không xử lý dữ liệu
                contentType: false, // Không thiết lập kiểu dữ liệu
                success: function (res) {
                    if (res.status == 200) {
                        swal("Cập nhật thành công!", {
                            icon: "success",
                        });
                    } else if (res.status == 401) {
                        swal(res.message, {
                            icon: "error",
                        });
                    }
                }
            });
        }
    </script>
@endsection
