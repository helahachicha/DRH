import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditdevjuniorComponent } from './editdevjunior.component';

describe('EditdevjuniorComponent', () => {
  let component: EditdevjuniorComponent;
  let fixture: ComponentFixture<EditdevjuniorComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditdevjuniorComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditdevjuniorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
