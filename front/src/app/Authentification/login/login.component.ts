import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/shared/service/auth.service';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {

  error:any = null ;
  
  public userForm = new FormGroup({
    email: new FormControl('', [Validators.required]),
    password: new FormControl('', [Validators.required, Validators.minLength(6)])
  });
  constructor(
    private auth: AuthService ,
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
 

  }
  submit() {
   console.log(this.userForm.value) 
    if (this.userForm.invalid) {
      this.error = "Username and Password not valid !";
      return;
    } else {
       this.dataService.post('users/login.json',this.userForm.value).subscribe(
         data => this.handleResponse(data.data),
         error => this.handleError(error))
    }

  }
  handleResponse(data) {
    this.auth.login(data.token);
    this.router.navigate(['/dashboard']);
  }
  handleError(error) {
    this.error = error.originalError.error.message;
    console.log( error)
  }

}
