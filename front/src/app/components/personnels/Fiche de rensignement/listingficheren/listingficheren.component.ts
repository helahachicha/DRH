import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingficheren',
  templateUrl: './listingficheren.component.html',
  styleUrls: ['./listingficheren.component.scss']
})
export class ListingficherenComponent implements OnInit {
 public Infoemployes
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute,
  ) { }

  ngOnInit(): void {
    this.getallnomemp()
  }
  getallnomemp() {
    this.dataService.get('Infoemployes/getAllInfoemploye.json').subscribe(res => {
      this.Infoemployes = res.data;
    })
  }
 //////////////////////////////he4a elli lezmou yete5dem//////////
 //getallnom() {
 // this.dataService.get('Infoficheevaluations/getAllNom.json').subscribe(res => {
 //   this.Infoficheevaluations = res.data;
 ///   console.log("heloo",this.Infoficheevaluations)
 // })
//}

deletenom(id){
  this.dataService.delete('Infoemployes/deleteInfoemploye.json?id='+id).subscribe(res => {
    this.getallnomemp()
  })
}

}
