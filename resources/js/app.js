import './bootstrap';

require('./src');


import ReactDOM from 'react-dom/client';        
import Home from './Page/Home';

ReactDOM.createRoot(document.getElementById('app')).render(     
    <Home />        
)