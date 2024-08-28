@extends('template/template')

@section('content')

<div class="container my-5">
    <div class="bg-body-tertiary p-5 rounded">
        <div class="col-sm-8 py-5 mx-auto">
            <h1 class="display-5 fw-normal">Navbar with offcanvas examples</h1>
            <p class="fs-5">This example shows how responsive offcanvas menus work within the navbar. For
                positioning of navbars, checkout the <a href="../examples/navbar-static/">top</a> and <a
                    href="../examples/navbar-fixed/">fixed top</a> examples.</p>
            <p>From the top down, you'll see a dark navbar, light navbar and a responsive navbar—each with
                offcanvases built in. Resize your browser window to the large breakpoint to see the toggle for
                the offcanvas.</p>
            <p>
                <a class="btn btn-primary" href="../components/navbar/#offcanvas" role="button">Learn more
                    about offcanvas navbars &raquo;</a>
            </p>
        </div>
    </div>
</div>

@endsection