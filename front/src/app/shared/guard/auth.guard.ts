import { Injectable } from "@angular/core";
import {
  Router,
  CanActivate,
  ActivatedRouteSnapshot,
  RouterStateSnapshot,
} from "@angular/router";
import { UserInterface } from "../interface/user.interface";

import { AuthService } from "../service/auth.service";

@Injectable({
  providedIn: "root",
})
export class AuthGuard implements CanActivate {

  public isLogin
  public activeUser: UserInterface;

  canActivate(next: ActivatedRouteSnapshot, state: RouterStateSnapshot) {
    if (this.Auth.isLoggedIn()){
      return true;
    }else{
      return this.router.parseUrl('/login');
    }
  }

  constructor(
    private Auth: AuthService,
    private router: Router
  ) { }
}
