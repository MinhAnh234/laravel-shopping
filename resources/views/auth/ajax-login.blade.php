
        <form style="float:right" class="logout login-panel" action="{{ url('/logout') }}" method="post"  data-type="json">
            @csrf
          <button type="submit">  <i class="fa fa-sign-out"></i> logout</button>
        </form>
        <a href="javascript:"  class="login-panel"><i class="fa fa-user"></i>{{ $name }}</a>
          @if(Auth()->user()->role->name=="admin")
                        <div class="" style="position:fixed; top:10px;right:5px;z-index:100"><a class="btn btn-success btn--shockwave" href="/admin">Go to Admin Page</a></div>
                        @endif
 
