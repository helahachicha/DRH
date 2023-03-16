import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingdevtComponent } from './listingdevt.component';

describe('ListingdevtComponent', () => {
  let component: ListingdevtComponent;
  let fixture: ComponentFixture<ListingdevtComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingdevtComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingdevtComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
