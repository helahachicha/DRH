import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AuthentificationRoutingModule } from './authentification-routing.module';
import { ForgetpasswordComponent } from './forgetpassword/forgetpassword.component';
import { LoginComponent } from './login/login.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';
import { SharedModule } from '../shared/shared.module';
import { RegisterComponent } from './register/register.component';


@NgModule({
  declarations: [
    ForgetpasswordComponent, LoginComponent,
    RegisterComponent
  ],
  imports: [
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CommonModule,
    AuthentificationRoutingModule
  ]
})
export class AuthentificationModule { }
