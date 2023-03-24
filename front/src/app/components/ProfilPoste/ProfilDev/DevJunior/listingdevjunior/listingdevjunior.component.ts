import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingdevjunior',
  templateUrl: './listingdevjunior.component.html',
  styleUrls: ['./listingdevjunior.component.scss']
})
export class ListingdevjuniorComponent implements OnInit {

  
  public profilposte
  
  id:any;

   public profilposteForm= new FormGroup({
   nom: new FormControl('', [Validators.required]),
  
  });
 

  constructor(
    private dataService: DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
   this.getbyidprofile();

  }

    getbyidprofile() {
      this.id = this.route.snapshot.params['id'];

      this.dataService.get('Profilpostes/getProfilposte.json?id=' + this.id).subscribe(res => {
        this.profilposte = res.data;
        console.log("hello",this.profilposte)
  
  
      })
    }
}
