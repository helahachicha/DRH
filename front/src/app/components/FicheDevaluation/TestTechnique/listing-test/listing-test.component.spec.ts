import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingTestComponent } from './listing-test.component';

describe('ListingTestComponent', () => {
  let component: ListingTestComponent;
  let fixture: ComponentFixture<ListingTestComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingTestComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingTestComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
