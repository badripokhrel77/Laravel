
    
    <section class="login">
        @include('nav')
        <div class="wrapper">
            <form action="{{url('login')}}" method="post">
                @csrf
                <div class="header">
                    <div class="head_a">
                        <img src="../images/HRRS logo HD.webp" alt="HRRS">
                    </div>
                    <div class="head_b">
                        <h2>Login </h2>
                    </div>
                </div>
                <div class="input-box"> <input type="text" name="email" placeholder="Email" required> <i
                        class='bx bxs-envelope'></i>
                </div>
                <div class="input-box"> <input type="password" name="password" placeholder="password" required> <i
                        class='bx bxs-lock-alt'></i> </div>
                <div class="remember-forgot">
                    <lable> <input type="checkbox">&nbsp;Remember me</lable> <a href="#">Forgot password? </a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Don't have an account?<a href="{{url('register')}}">&nbsp;Register</a></p>
                </div>
            </form>
        </div>
        @include('footer')
    </section>
  