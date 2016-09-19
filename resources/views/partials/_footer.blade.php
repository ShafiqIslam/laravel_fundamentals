<footer>
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <ul class="nav navbar-nav">
                <li>{{ link_to('/article/' . $latest->id, $latest->title) }}</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li style="margin-top: 15px">Copyright &copy; {{ date('Y') }}</li>
            </ul>
        </div>
    </nav>
</footer>