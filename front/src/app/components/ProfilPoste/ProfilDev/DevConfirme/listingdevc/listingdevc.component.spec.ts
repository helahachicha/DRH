import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingdevcComponent } from './listingdevc.component';

describe('ListingdevcComponent', () => {
  let component: ListingdevcComponent;
  let fixture: ComponentFixture<ListingdevcComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingdevcComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingdevcComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
