import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditdevcComponent } from './editdevc.component';

describe('EditdevcComponent', () => {
  let component: EditdevcComponent;
  let fixture: ComponentFixture<EditdevcComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditdevcComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditdevcComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
