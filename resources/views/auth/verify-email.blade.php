<center>
<h1>Hãy Verify Email trước để được đăng bài.</h1>
<h2>Hãy kiểm tra Email của mình và xác minh.</h2>

<h3><a href="/home">Không Verify, chuyển hướng tới Home.</a></h3>


<form style="margin-top: 100px;" method="post" action="{{ route('verification.send') }}">
    @csrf
    
    <h3>Gửi lại email xác minh tại đây: </h3><button type="submit" class="btn btn-danger"> Gửi lại Mail Verify </button>

</form>

</center>