@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="card">
        <div class="card-header">
            <h4>Cập nhật sản phẩm</h4>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h4>Sản phẩm</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Mã sản phẩm</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập mã sản phẩm">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="select">Thương hiệu</label>
                                <div class="col-md-9">
                                    <select id="select" name="select" class="form-control">
                                        <option value="0">Chọn thương hiệu</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="file-input">Chọn ảnh</label>
                            <div class="col-md-9">
                                <input type="file" id="file-input" name="file-input">
                            </div>
                            </div><br>
                            <button type="button" class="btn btn-primary">Cập nhật sản phẩm</button>
                            </form>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="email-input">Xuất sứ</label>
                                    <div class="col-md-9">
                                        <input type="email" id="email-input" name="email-input" class="form-control" placeholder="Nhập xuất sứ">
                                    </div>
                                </div><br>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="email-input">Giá sản phẩm</label>
                                    <div class="col-md-9">
                                        <input type="email" id="email-input" name="email-input" class="form-control" placeholder="Nhập giá sản phẩm">
                                    </div>
                                </div><br>

                                <div class="form-group row">
                                <label class="col-md-3 form-control-label">Đối tượng sữ dụng</label>
                                <div class="col-md-9">
                                    <label class="radio-inline" for="inline-radio1">
                                        <input type="radio" id="inline-radio1" name="inline-radios" value="option1"> Nam
                                    </label>
                                    <label class="radio-inline" for="inline-radio2">
                                        <input type="radio" id="inline-radio2" name="inline-radios" value="option2"> Nữ
                                    </label>
                                    <label class="radio-inline" for="inline-radio3">
                                        <input type="radio" id="inline-radio3" name="inline-radios" value="option3"> Cặp đôi
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Thông tin chi tiết sản phẩm</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Chất liệu</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập chất liệu">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Phong cách</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập phong cách">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Loại vỏ</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập Loại vỏ">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Màu sắc</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập màu sắc">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Mặt đồng hồ</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập mặt đồng hồ">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label>(*)Lưu ý: Thông tin chi tiết phải nhập từ 2 thông tin trở lên</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Mặt kính</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập mặt kính">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Đường kính</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập đường kính">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Năng lượng</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập năng lượng">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Chống nước</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập chống nước">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Bộ máy</label>
                                <div class="col-md-9">
                                    <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập bộ máy">
                                </div>
                            </div><br>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Đánh giá sản phẩm</h4>
                </div>
                <div class="card-body">
                    <label >Nhập bài đánh giá</label>
                    <div id="editor">

                        <p><b>Bootstrap</b> is a <a href="https://genesisui.com/wiki/Free_and_open-source_software" title="Free and open-source software">free and open-source</a> front-end <a href="https://genesisui.com/wiki/Web_framework" title="Web framework">web framework</a> for designing
                            <a href="https://genesisui.com/wiki/Website" title="Website">websites</a>and <a href="https://genesisui.com/wiki/Web_application" title="Web application">web applications</a>. It contains <a href="https://genesisui.com/wiki/HTML" title="HTML">HTML</a>- and <a href="https://genesisui.com/wiki/CSS" class="mw-redirect"
                            title="CSS">CSS</a>-based design templates for <a href="https://genesisui.com/wiki/Typography" title="Typography">typography</a>, forms, buttons, navigation and other interface components, as well as optional <a href="https://genesisui.com/wiki/JavaScript" title="JavaScript">JavaScript</a> extensions.
                            Unlike many web frameworks, it concerns itself with <a href="https://genesisui.com/wiki/Front-end_web_development" title="Front-end web development">front-end development</a> only.</p>
                        <p>Bootstrap is the second most-starred project on <a href="https://genesisui.com/wiki/GitHub" title="GitHub">GitHub</a>, with more than 111,600 stars and 51,500 forks.<sup id="cite_ref-most-starred_3-0" class="reference"><a href="#cite_note-most-starred-3">[3]</a></sup>
                        </p>
                        <p>Bootstrap, originally named Twitter Blueprint, was developed by Mark Otto and Jacob Thornton at <a href="https://genesisui.com/wiki/Twitter" title="Twitter">Twitter</a> as a framework to encourage consistency across internal tools. Before Bootstrap,
                            various libraries were used for interface development, which led to inconsistencies and a high maintenance burden. According to <a href="https://genesisui.com/wiki/Twitter" title="Twitter">Twitter</a> developer Mark Otto:</p>
                        <blockquote class="templatequote">
                            <p>"A super small group of developers and I got together to design and build a new internal tool and saw an opportunity to do something more. Through that process, we saw ourselves build something much more substantial
                                than another internal tool. Months later, we ended up with an early version of Bootstrap as a way to document and share common design patterns and assets within the company."<sup id="cite_ref-bootstrap_a_list_apart_4-0"
                                class="reference"><a href="#cite_note-bootstrap_a_list_apart-4">[4]</a></sup>
                            </p>
                        </blockquote>
                        <p>After a few months of development by a small group, many developers at Twitter began to contribute to the project as a part of Hack Week, a <a href="https://genesisui.com/wiki/Hackathon" title="Hackathon">hackathon</a>-style week for the Twitter
                            development team. It was renamed from Twitter Blueprint to Bootstrap, and released as an open source project on August 19, 2011.<sup id="cite_ref-v1-release_5-0" class="reference"><a href="#cite_note-v1-release-5">[5]</a></sup> It
                            has continued to be maintained by Mark Otto, Jacob Thornton, and a small group of core developers, as well as a large community of contributors.<sup id="cite_ref-about_6-0" class="reference"><a href="#cite_note-about-6">[6]</a></sup>
                        </p>

                    </div><br><br>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Plugins and scripts required by this views -->
    <script src="{!!  asset('citi_admin/js/quill.min.js')  !!}"></script>


    <!-- Custom scripts required by this view -->
    <script src="{!!  asset('citi_admin/js/views/text-editors.js')  !!}"></script>

@endsection