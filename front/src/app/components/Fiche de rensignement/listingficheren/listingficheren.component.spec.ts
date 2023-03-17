import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingficherenComponent } from './listingficheren.component';

describe('ListingficherenComponent', () => {
  let component: ListingficherenComponent;
  let fixture: ComponentFixture<ListingficherenComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingficherenComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingficherenComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
