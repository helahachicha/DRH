import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditformainterneComponent } from './editformainterne.component';

describe('EditformainterneComponent', () => {
  let component: EditformainterneComponent;
  let fixture: ComponentFixture<EditformainterneComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditformainterneComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditformainterneComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
