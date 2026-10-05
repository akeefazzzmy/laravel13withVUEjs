import RegisterController from './RegisterController'
import LoginController from './LoginController'
const Auth = {
    RegisterController: Object.assign(RegisterController, RegisterController),
LoginController: Object.assign(LoginController, LoginController),
}

export default Auth