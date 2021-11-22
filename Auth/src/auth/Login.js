import react from "react";

const Login = () => {
    return (
        <div className="container">
            <div className="row ">
                <div className="col-md-6">
                    <div className="card">
                        <form onsubmit="event.preventDefault()" className="box">
                            <h1>Login</h1>
                            <input type="text" placeholder="Username"></input>
                            <input type="password" placeholder="Password" ></input>
                            <input type="submit" value="Login" href="#"></input>
                            <div className="col-md-12">
                                <ul className="social-network social-circle">
                                    <li><a href='' className='icoFacebook' title='Facebook'><i className="fab fa-facebook-f"></i></a></li>
                                    <li><a href='#' className='icoGoogle' title='Google +'><i className="fab fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Login

