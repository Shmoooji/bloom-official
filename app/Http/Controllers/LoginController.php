?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use DB;

class LoginController extends Controller
{
    protected function authentication(Request $request)
    {      
        $email = $request->input("email");
        $pass = $request->input("password");
        $login = new Login();
        $response = $login->account_authentication($email, $pass);
        echo $response;
    }

    protected function get_accounts(){
        $login = new Login();
        return $login->get_accounts();
    }

    protected function account_details()
    {      
        $login = new Login();
        return $response = $login->get_account();
    }

}