<!-- フッターを入れたいところに、includeする -->
<div class="footer">
    <div class="igroup">
        <a href="{{ url('/') }}"><i class="material-icons mi menu">
            subject
        </i></a>
        <p>Top</p>
    </div>
    <div class="igroup">
        <a href="#"><i class="material-icons mi">
            publish
        </i></a>
        <p>Search</p>
    </div>
    <div class="igroup">
        <a href="#"><i class="material-icons mi">
            map
        </i></a>
        <p>Like</p>
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
    position: absolute;
    width: 100%;
    height: 7%;
    background-color: #ebebeb;
    bottom: 0;
    box-shadow: 4px 0 0 0 #6b6b6b;
    display:flex;
    justify-content: space-around;
    align-items: center;
}
</style>
