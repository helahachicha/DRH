import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddformainterneComponent } from './addformainterne.component';

describe('AddformainterneComponent', () => {
  let component: AddformainterneComponent;
  let fixture: ComponentFixture<AddformainterneComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddformainterneComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddformainterneComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
