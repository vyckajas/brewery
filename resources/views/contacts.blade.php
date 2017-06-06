@extends('layouts.master')

@section('content')
    <div class="container gapFromNav">
        <div class="row">
            <div class="col-sm-4 blog-main">
                <h1>Contacts</h1>
                <address>
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<a href="tel:+37060012345">+370 600
                                12345</a></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;<a href="mailto:office@example.com">office@example
                                .com</a></li>
                        <li><i class="fa fa-home" aria-hidden="true"></i> &nbsp;<a
                                    href="https://goo.gl/maps/rWwPYYjw7fC2">Taikos g. 101, Vilnius</a></li>
                    </ul>
                </address>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
            <div class="col-sm-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.388035764867!2d25.21126441557104!3d54.72038907860427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd917f3eefb93d%3A0x3ee14bbdab34c814!2sTaikos+g.+101%2C+Vilnius+05201!5e0!3m2!1slt!2slt!4v1495769795443"
                        width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection