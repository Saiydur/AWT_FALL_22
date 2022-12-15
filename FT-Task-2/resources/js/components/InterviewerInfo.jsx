import React from "react";

const InterviewerInfo = ({ info }) => {
    return (
        <tbody class="intListBody">
            <tr>
                <td>{info.uname}</td>
                <td>{info.email}</td>
            </tr>
        </tbody>
    );
};

export default InterviewerInfo;
