import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingprofilposteComponent } from './listingprofilposte.component';

describe('ListingprofilposteComponent', () => {
  let component: ListingprofilposteComponent;
  let fixture: ComponentFixture<ListingprofilposteComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingprofilposteComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingprofilposteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
