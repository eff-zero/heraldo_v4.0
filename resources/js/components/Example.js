import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
        <div className="container pt-5">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card text-center">
                        <div className="card-header"> <h4> Componente de Ejemplo de React </h4> </div>

                        <div className="card-body"> I'm an example component! </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
