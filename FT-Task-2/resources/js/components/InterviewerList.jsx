import axios from "axios";

import React, { useState } from "react";
import * as ReactDOM from "react-dom";
import InterviewerInfo from "./interviewerInfo";

const baseUrl = "http://localhost:8000/api/getInterviewersList";
const InterviewerList = () => {
    const [lst, setList] = useState(null);

    useState(() => {
        axios.get(baseUrl).then((r) => {
            setList(r.data);
        });
    }, []);

    return (
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5">
                    <a
                        href="/createInterviewProfile"
                        class="btn btn-primary btn-small"
                    >
                        Add Interviewer Profile
                    </a>
                    &nbsp;
                    <a href="/users" class="btn btn-primary btn-small">
                        Show Users List
                    </a>
                    <br />
                    <br />
                    <br />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        {lst &&
                            lst.map((i) => (
                                <InterviewerInfo key={i.id} info={i} />
                            ))}
                    </table>
                </div>
            </div>
        </div>
    );
};

export default InterviewerList;

if (document.getElementById("i-root")) {
    ReactDOM.render(<InterviewerList />, document.getElementById("i-root"));
}
