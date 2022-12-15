import axios from "axios";

import React, { useState } from "react";
import * as ReactDOM from "react-dom";
import UserInfo from "./UserInfo";

const baseUrl = "http://localhost:8000/api/getusersList";

const ShowUserList = () => {
    const [lst, setList] = useState(null);

    useState(() => {
        axios.get(baseUrl).then((r) => {
            setList(r.data);
        });
    }, []);

    console.log(lst);

    return (
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5">
                    <a href="/" class="btn btn-primary btn-small">
                        Show Registered User List
                    </a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>

                        {lst &&
                            lst.map((u) => <UserInfo key={u.id} info={u} />)}
                    </table>
                </div>
            </div>
        </div>
    );
};

export default ShowUserList;

if (document.getElementById("u-root")) {
    ReactDOM.render(<ShowUserList />, document.getElementById("u-root"));
}
