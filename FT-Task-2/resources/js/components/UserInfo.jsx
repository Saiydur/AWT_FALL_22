import React from "react";

const UserInfo = ({ info }) => {
    return (
        <tbody class="ci-root">
            <tr>
                <td>{info.uname}</td>
                <td>{info.mail}</td>
                <td>{info.role}</td>
            </tr>
        </tbody>
    );
};

export default UserInfo;
