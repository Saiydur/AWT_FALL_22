import axios from "axios";

import React, { useEffect, useState } from "react";
import * as ReactDOM from "react-dom";
const baseUrl = "http://localhost:8000/api/createInterviewerAccount";

const CreateInterviewProfile = () => {
    let [iData, setIData] = useState({ uname: "", pass: "", mail: "" });

    const HandleOnChange = (e) => {
        e.preventDefault();
        setIData({ ...iData, [e.target.name]: e.target.value });
    };

    const HandleSubmit = (e) => {
        e.preventDefault();
        axios.post(baseUrl, { ...iData }).then((r) => {
            alert("Interviewer added sucessfully");
        });
    };

    // useEffect(() => {
    //     // e.preventDefault();
    // }, []);

    return (
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form
                    id="interviewRegister"
                    method="post"
                    class="shadow-lg p-5 m-3 bg-white"
                    onSubmit={HandleSubmit}
                    novalidate
                >
                    <fieldset>
                        <legend>Create Interviewer Profile</legend>
                        <div class="form-group">
                            <label for="uname" class="form-label">
                                User Name :
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                name="uname"
                                id="uname"
                                value={iData.uname}
                                onChange={HandleOnChange}
                            />
                        </div>
                        <div class="form-group">
                            <label for="mail" class="form-label">
                                Email :
                            </label>
                            <input
                                type="email"
                                class="form-control"
                                name="mail"
                                id="mail"
                                value={iData.email}
                                onChange={HandleOnChange}
                            />
                        </div>
                        <div class="form-group">
                            <label for="pass" class="form-label">
                                Password :
                            </label>
                            <input
                                type="password"
                                class="form-control"
                                name="pass"
                                id="pass"
                                value={iData.pass}
                                onChange={HandleOnChange}
                            />
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">
                        Create Profile
                    </button>{" "}
                    <a href="/" class="btn btn-primary">
                        Go Back
                    </a>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    );
};
export default CreateInterviewProfile;

if (document.getElementById("ci-root")) {
    ReactDOM.render(
        <CreateInterviewProfile />,
        document.getElementById("ci-root")
    );
}
