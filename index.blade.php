@extends('layouts.backend.app')
@section('content')
    <div class="content">
        <div class="cus-master">
            <div class="sec-head">
                <p> 会社マスタ</p>
            </div>
            <div class="sec-content">
                <p>会社情報</p>
                <form action="/company/create" method="post" id="create-company"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p for="comapany_name">会社名</p>
                                <input type="text" class="form-control" id="comapany_name" name="comapany_name"
                                       placeholder="株式会社 トータル インテリア トップス">
                                <div class="error-comapany-name has-error text-center text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p for="company_name_english">会社　英語表記</p>
                                <input type="text" class="form-control" id="company_name_english"
                                       name="company_name_english" placeholder="TOTAL INTERIOR TOP'S">
                                <div class="error-company-name-english has-error text-center text-danger"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p for="company_name_english">Anh o vi tri nay</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p for="company_address">住所</p>
                                <input type="text" class="form-control" id="company_address" name="company_address"
                                       placeholder="〒124－0023   東京都葛飾区東新小岩2－22－１">
                                <div class="error-company-address has-error text-center text-danger"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p for="company_contact">連絡先</p>
                                <input type="text" class="form-control" id="company_contact" name="company_contact"
                                       placeholder="TEL 03(5671)3771    FAX 03(5671)3775">
                                <div class="error-company-contact has-error text-center text-danger"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>ロゴ設定</p>
                                <input type="file" class="form-control" id="company_logo" name="company_logo"
                                       value="参照">
                                <div class="error-company-logo has-error text-center text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p for="company_sign">テキスト欄</p>
                                <input type="text" class="form-control" id="company_sign" name="company_sign"
                                       placeholder="東京都知事許可  （般ー19）  第118411号">
                                <div class="error-company-sign has-error text-center text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p for="company_financial_month">決算月</p>
                                <input type="text" class="form-control" id="company_financial_month"
                                       name="company_financial_month" placeholder="2月">
                                <div class="error-company-financial-month has-error text-center text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p for="tax">消費税</p>
                                <input type="text" class="form-control" id="tax" name="tax" placeholder="8%">
                                <div class="error-tax has-error text-center text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p for="company_established_date">期設定※開始月</p>
                                <input type="date" class="form-control" id="company_established_date"
                                       name="company_established_date">
                                <div class="error-company-established-date has-error text-center text-danger"></div>
                            </div>
                        </div>
                    </div>
                </form>
                <input class="btn btn-default btn-create-company" type="button" name="save" value="Save">
            </div>
@endsection