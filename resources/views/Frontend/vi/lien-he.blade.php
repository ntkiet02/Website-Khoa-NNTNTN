@extends('Frontend.layout')
@section('title', 'Thông tin liên hệ')
@section('css')
<style type="text/css" media="screen">
  .noi-dung h2 {
    padding: 20px 0px;
    color: #27316b;
    margin-top: 10px;
    margin-bottom: 10px;
    text-align:center;
  }
</style>
@endsection
@section('body')
<section class="our-impotance have-question padding-lg">
  <div class="container noi-dung">
    <h2>LIÊN HỆ</h2>
    {!! $noi_dung !!}
    {{-- <p>Chi tiết vui lòng liên hệ: TRUNG TÂM NGHIÊN CỨU KHOA HỌC XÃ HỘI VÀ NHÂN VĂN</p> --}}
    {{-- <ul class="row">
      <li class="col-sm-4 equal-hight">
        <div class="inner">
            <div class="icon" style="font-size:50px;color:#005aab;"><span class="icon-map-marker-icon"></span></div>
            <h3>Địa chỉ</h3>
            <p style="font-size:18px;color:#000;">số 18, Ung Văn Khiêm, P. Đông Xuyên, TP. Long Xuyên, An Giang</p>
        </div>
      </li>
      <li class="col-sm-4 equal-hight">
        <div class="inner">
            <div class="icon" style="font-size:50px;color:#005aab;"><span class="icon-phone-icon"></span></div>
          <h3>Điện thoại</h3>
          <p style="font-size:18px;color:#000;">02963.943.695</p>
        </div>
      </li>
      <li class="col-sm-4 equal-hight">
        <div class="inner">
            <div class="icon" style="font-size:50px;color:#005aab;"><span class="icon-envelop-icon"></span></div>
            <h3>Email</h3>
            <p style="font-size:18px;color:#000;">shrc@agu.edu.vn</p>
        </div>
      </li>
    </ul> --}}
  </div>
</section>
<section class="google-map">
  <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1962.3236525332293!2d105.43123382761968!3d10.370059566543473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac5cc8ab6416d0f3!2sLibrary%20AGU!5e0!3m2!1sen!2s!4v1599635584771!5m2!1sen!2s" width="100%" height="550px" style="border:none;"></iframe></div>
  <div class="container">
    <div class="contact-detail">
      <div class="address">
        <div class="inner">
          <h3>KHOA NÔNG NGHIỆP - TÀI NGUYÊN THIÊN NHIÊN</h3>
          <p>18 Ung Văn Khiêm, P. Đông Xuyên, TP. Long Xuyên, An Giang</p>
        </div>
        <div class="inner">
          <h3><a href="tel:02963943695">02963.943.695</a></h3>
        </div>
        <div class="inner"> <a href="mailto:shrc@agu.edu.vn">agri@agu.edu.vn</a> </div>
      </div>

    </div>
  </div>
</section>
@endsection
