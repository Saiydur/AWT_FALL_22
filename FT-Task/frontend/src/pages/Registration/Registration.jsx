import React from "react";
import axios from "axios";

function Registration()
{
    const handleSubmit = (e) => {
        e.preventDefault();
        const email = e.target.email.value;
        const password = e.target.password.value;
        axios.post("http://127.0.0.1:8000/api/register", {
            email,
            password
        })
        .then((res) => {
            console.log(res);
        })
        .catch((err) => {
            console.log(err);
        });
    };

    const handleChange = (e) => {
        const { name, value } = e.target;
        console.log(name, value);
    };

    return (
        <>
            <form onSubmit={handleSubmit}>
                <div>
                    <label htmlFor="email">Email</label>
                    <input type="text" name="email" id="email" onChange={handleChange}/>
                </div>
                <div>
                    <label htmlFor="password">Password</label>
                    <input type="password" name="password" id="password" onChange={handleChange}/>
                </div>
                <div>
                    <button>
                        Register
                    </button>
                </div>
            </form>
        </>
    );
}

export default Registration;