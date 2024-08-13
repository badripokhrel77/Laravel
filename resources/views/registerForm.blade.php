<section class="reg">
    @include('nav')
    <div class="Reg-form">
        <div class="header">
            <div class="head_c">
                <img src="../images/HRRS logo HD.webp" alt="HRRS">
            </div>
            <div class="head_d">
                <h1>Registration Form</h1>
            </div>
        </div>

        <form action="{{ url('register') }}" method="post">
            @csrf
            <div class="name">
                <div class="first">
                    <p>First Name:</p>
                    <div class="input-box"> <input type="text" name="f_name" placeholder="First Name" required> <i
                            class='bx bxs-user icon'></i>
                    </div>
                </div>
                <div class="first">
                    <p>Last Name:</p>
                    <div class="input-box">
                        <input type="text" name="l_name" placeholder="Last Name" required> <i
                            class='bx bxs-user icon'></i>
                    </div>
                </div>
            </div>
            <div class="name">
                <div class="first">
                    <p>Address:</p>
                    <div class="input-box">
                        <input type="text" name="address" placeholder="Address" required> <i
                            class='bx bxs-map icon'></i>
                    </div>
                </div>
                <div class="first">
                    <p>phone Number:</p>
                    <div class="input-box">
                        <input type="text" name="phone" placeholder="Phone Number" required> <i
                            class='bx bxs-phone icon'></i>
                    </div>
                </div>
            </div>
            <p>Email:</p>
            <div class="input-box">
                </class><input type="text" name="email" placeholder="Email" required> <i
                    class='bx bxs-envelope icon'></i>
            </div>
            <p>password:</p>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required> <i
                    class='bx bxs-lock-alt icon'></i>
            </div>
            <div class="btn">
                <button type="submit">Register</button>
            </div>
            <div class="login-link">
                <p>Already have an account?<a href="{{ url('login') }}">&nbsp;Login</a></p>
            </div>
        </form>
    </div>
    @include('footer')
</section>
