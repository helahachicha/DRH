import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditformaComponent } from './editforma.component';

describe('EditformaComponent', () => {
  let component: EditformaComponent;
  let fixture: ComponentFixture<EditformaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditformaComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditformaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
