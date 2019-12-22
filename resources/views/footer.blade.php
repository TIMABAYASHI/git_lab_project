<!-- フッターを入れたいところに、includeする -->
<div class="footer">
    <div class="igroup">
        <a href="{{ url('/') }}"><i class="material-icons mi home">
            home
        </i></a>
        <p>home</p>
    </div>
    <div class="igroup">
        <a href="{{ url('/board') }}"><i class="material-icons mi post">
            sms
        </i></a>
        <p>Post</p>
    </div>
    <div class="igroup">
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a href="#">
            <i class="material-icons mi">
            share
        </i></a>
        <p>Share</p>
    </div>
    <div class="igroup">
        <a href="{{ url('/mypage') }}"><i class="material-icons mi myPage">
            perm_identity
        </i></a>
        <p>My page</p>
    </div>
</div>

<style>
a {
    display: inline-block;
}

p{
    font-size: 10px;
    color:gray;
    text-align: center;
}

    .mi {
    text-align: center;
    font-size: 35px;
    margin: 2% 2% auto;
    color: rgba(0, 0, 0, 0.4);
}

    .mi:hover {
    color: #24bddc;
}

.mi.back {
    margin: 3% 4% 1% 3%;
}

.footer {
    position: fixed;
    bottom: 0px;
    left:0px;
    width: 100%;
    height: 8%;
    background-color: #ebebeb;
    box-shadow: 4px 0 0 0 #6b6b6b;
    display:flex;
    justify-content: space-around;
    align-items: center;
}
</style>
