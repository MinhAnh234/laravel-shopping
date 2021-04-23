
        <form style="float:right" class="logout login-panel" action="{{ url('/logout') }}" method="post"  data-type="json">
            @csrf
          <button type="submit">  <i class="fa fa-sign-out"></i> logout</button>
        </form>
        <a href="javascript:"  class="login-panel"><i class="fa fa-user"></i>{{ $name }}</a>
 
