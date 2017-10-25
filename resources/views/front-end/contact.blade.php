@extends('front-end.master')
@section('title')
    Contact
    @endsection

@section('content')

    <!--contact-starts-->
    <div class="contact">
        <div class="container">
            <div class="contact-top">
                <h3>CONTACT US</h3>
                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</P>
            </div>
            <div class="contact-bottom">
                <div class="contact-bottom-top">
                    <div class="col-md-8 contact-top-left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20961.43405141948!2d2.24777995!3d48.950072500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66664dfcb055b%3A0x40b82c3688b36d0!2sArgenteuil%2C+France!5e0!3m2!1sen!2sin!4v1419059944784"frameborder="0" style="border:0"></iframe>
                    </div>
                    <div class="col-md-4 contact-top-left">
                        <div class="contact-top-one">
                            <h4>ADDRESS:</h4>
                            <h6>The Company Name agi.
                                <span>756 gt globel Place,</span>
                                CD-Road,M 07 435.
                            </h6>
                        </div>
                        <div class="contact-top-one">
                            <h4>PHONES:</h4>
                            <p>Telephone: +1 234 567 9871
                                <span>FAX: +1 234 567 9871</span>
                            </p>
                        </div>
                        <div class="contact-top-one">
                            <h4>E-MAIL:</h4>
                            <p><a href="mailto:info@example.com">mail@user.com</a></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="contact-bottom-bottom">
                    <h3>MISCELLANEOUS INFORMATION:</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
                    <div class="contact-text">
                        <input type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"/>
                        <input type="text" value="Second Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Second Name';}"/>
                        <input type="text" value="Email Id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Id';}"/>
                    </div>
                    <div class="contact-textarea">
                        <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
                    </div>
                    <div class="contact-but">
                        <input type="submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact-end-->

    <hr>
    <hr>
    <hr>
    <hr>

    {{Form::open(['url' => '', 'method' => 'post'])}}
    {{Form::text('username')}}
    {{Form::close()}}

    @endsection