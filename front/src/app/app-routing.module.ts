import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './Home/home/home.component';
import { FooterComponent } from './Layout/footer/footer.component';
import { HeaderComponent } from './Layout/header/header.component';
const routes: Routes = [
  { path: 'home', component: HomeComponent},
  { path: 'header', component: HeaderComponent },





  //path module profil
  {
    path: 'Detail-profile/:id',
    loadChildren: () => import('./components/ProfilPostee/profil-postee.module').then(m => m.ProfilPosteeModule)
  },



  //Authentification
  {
    path: 'login',
    loadChildren: () => import('./Authentification/authentification.module').then(m => m.AuthentificationModule)
  },

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
