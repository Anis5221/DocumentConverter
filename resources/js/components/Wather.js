import React from 'react';
import ReactDOM from 'react-dom';
import "./style.css";

function Wather() {
    return (
        <>
            <div className="box">
                    <div className="">
                        <input type="search" className="inputField" />

                    </div>
            </div>
        </>
    );
}

export default Wather;

if (document.getElementById('wather')) {
    ReactDOM.render(<Wather />, document.getElementById('wather'));
}
