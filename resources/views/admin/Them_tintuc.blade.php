@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="card">
            <div class="card-header">
                <h4>Thêm tin tức</h4>
            </div>
            <div class="card-body">
                <div class="row">

                        <div class="card">
                            <div class="card-body">

                                <label >Nhập tiêu đề</label>
                                <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Nhập tên tiêu đề bài viết"><br>

                                <label>Chọn danh mục bài viết</label>
                                <select id="select" name="select" class="form-control">
                                        <option value="0">Please select</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                </select><br>


                                <label>Nhập nội dung bài viết</label>

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
                                <button type="button" class="btn btn-primary">Thêm Media</button>
                                <button type="button" class="btn btn-primary">Lưu nháp</button>
                                <button type="button" class="btn btn-primary">Đăng bài</button>

                            </div>
                        </div>

                </div>
            </div>
        </div>
    </form>
</div>

    <!-- Plugins and scripts required by this views -->
    <script src="{!!  asset('citi_admin/js/quill.min.js')  !!}"></script>


    <!-- Custom scripts required by this view -->
    <script src="{!!  asset('citi_admin/js/views/text-editors.js')  !!}"></script>


@endsection