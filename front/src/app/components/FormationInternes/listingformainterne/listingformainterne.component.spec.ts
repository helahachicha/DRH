import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingformainterneComponent } from './listingformainterne.component';

describe('ListingformainterneComponent', () => {
  let component: ListingformainterneComponent;
  let fixture: ComponentFixture<ListingformainterneComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingformainterneComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingformainterneComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
