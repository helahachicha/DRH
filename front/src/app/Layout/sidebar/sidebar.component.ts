import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.scss']
})
export class SidebarComponent implements OnInit {
 
  public Categories
  public poste
  public Testtechniques
  public open:boolean=false
  constructor(
    private dataService:DataService,
  ) {}
  ngOnInit(): void {
    this.getAllcategorie()
    this.getAllposte()
    this.getAlltest()

  }
  getAllcategorie(){
    this.dataService.get('Categories/getAllCategorie.json').subscribe(res=>{
       this.Categories=res.data
       this.open=true
    })
  }
  getAllposte(){
    this.dataService.get('Postes/getAllPoste.json').subscribe(res=>{
       this.poste=res.data
       this.open=true
    })
  }
  getAlltest(){
    this.dataService.get('Testtechniques/getAllTesttechnique.json').subscribe(res=>{
       this.Testtechniques=res.data
       this.open=true
    })
  }
  getid(id:any){
    //console.log(id)
  }
  
}
