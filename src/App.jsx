/*
import React, { Component } from 'react'
import { Home } from './Components/Home'
import { BrowserRouter, Route } from 'react-router-dom'



export class App extends Component {
    

    render() {
        return (
            
                    <BrowserRouter>
                        
                            {/* home }
                            <Route exact path='/' component={() => <Home user={this.state.user} />} />
                          
                            
                        
                    </BrowserRouter>
                
        )
    }
}

export default App;*/






//import './App.css';
import { Home } from './Components/Home'
import { BrowserRouter as Router} from 'react-router-dom'
import { AddProducts } from './Components/AddProducts';
import UserAuthContext from './Config/UserAuthContext';
import SignUp from './Components/Signup';
import Login from './Components/Login';
import { createBrowserRouter, RouterProvider, Route} from "react-router-dom";


const router = createBrowserRouter([
    {
        path: "/",
        element: < Login/>,
    },
    {
        path: "/Signup",
        element: < SignUp/>,
    },
    {
        path: "/AddProducts",
        element: < AddProducts/>,
    }
])

function App() {
    return ( 
        <UserAuthContext>
            <RouterProvider router={router} />
        </UserAuthContext>
    );
}

export default App;