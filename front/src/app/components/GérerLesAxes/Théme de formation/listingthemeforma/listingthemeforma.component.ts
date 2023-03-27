import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingthemeforma',
  templateUrl: './listingthemeforma.component.html',
  styleUrls: ['./listingthemeforma.component.scss']
})
export class ListingthemeformaComponent implements OnInit {

  constructor(
    private dataService:DataService,
  ) { }

  ngOnInit(): void {
  }

  //getallthemeforma() {
   // this.dataService.get('Profilpostes/getAllProfilposte.json').subscribe(res => {
   //   this.Profilpostes = res.data;
  //    this.open=true
    //  console.log("hello",this.Profilpostes)


   // })
 // }

  //deletethemeforma(id){
   // this.dataService.delete('Profilpostes/deleteProfilposte.json?id='+id).subscribe(res => {
   //   this.getallprofile()
   // })
 // }



}
