package com.menu.coheal.ui;

import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
//import com.menu.coheal.entities.user.User;
//import com.menu.coheal.services.user.ServiceUser;

/**
 * GUI builder created Form
 *
 * @author wajdi's pc
 */
public class RegisterForm extends com.codename1.ui.Form {

    public RegisterForm() {
        this(com.codename1.ui.util.Resources.getGlobalResources());
    }
    
    public RegisterForm(com.codename1.ui.util.Resources resourceObjectInstance) {
        initGuiBuilderComponents(resourceObjectInstance);
    }

//////////////////-- DON'T EDIT BELOW THIS LINE!!!
    protected com.codename1.ui.Container gui_Box_Layout_Y = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    protected com.codename1.ui.TextField gui_firstName = new com.codename1.ui.TextField();
    protected com.codename1.ui.TextField gui_lastName = new com.codename1.ui.TextField();
    protected com.codename1.ui.TextField gui_email = new com.codename1.ui.TextField();
    protected com.codename1.ui.TextField gui_password = new com.codename1.ui.TextField();
    protected com.codename1.ui.spinner.Picker gui_Picker = new com.codename1.ui.spinner.Picker();
    protected com.codename1.ui.Button gui_Btn_Register = new com.codename1.ui.Button();
    protected com.codename1.ui.Button gui_Btn_Login = new com.codename1.ui.Button();


// <editor-fold defaultstate="collapsed" desc="Generated Code">                          
    private void guiBuilderBindComponentListeners() {
        EventCallbackClass callback = new EventCallbackClass();
        gui_Btn_Register.addActionListener(callback);
        gui_Btn_Login.addActionListener(callback);
    }

    class EventCallbackClass implements com.codename1.ui.events.ActionListener, com.codename1.ui.events.DataChangedListener {
        private com.codename1.ui.Component cmp;
        public EventCallbackClass(com.codename1.ui.Component cmp) {
            this.cmp = cmp;
        }

        public EventCallbackClass() {
        }

        public void actionPerformed(com.codename1.ui.events.ActionEvent ev) {
            com.codename1.ui.Component sourceComponent = ev.getComponent();

            if(sourceComponent.getParent().getLeadParent() != null && (sourceComponent.getParent().getLeadParent() instanceof com.codename1.components.MultiButton || sourceComponent.getParent().getLeadParent() instanceof com.codename1.components.SpanButton)) {
                sourceComponent = sourceComponent.getParent().getLeadParent();
            }

            if(sourceComponent == gui_Btn_Register) {
                onBtn_RegisterActionEvent(ev);
            }
            if(sourceComponent == gui_Btn_Login) {
                onBtn_LoginActionEvent(ev);
            }
        }

        public void dataChanged(int type, int index) {
        }
    }
    private void initGuiBuilderComponents(com.codename1.ui.util.Resources resourceObjectInstance) {
        guiBuilderBindComponentListeners();
        setLayout(new com.codename1.ui.layouts.LayeredLayout());
        setInlineStylesTheme(resourceObjectInstance);
        setScrollableY(true);
                setInlineStylesTheme(resourceObjectInstance);
        setTitle("RegisterForm");
        setName("RegisterForm");
        gui_Box_Layout_Y.setPreferredSizeStr("230.95238mm 83.862434mm");
                gui_Box_Layout_Y.setInlineStylesTheme(resourceObjectInstance);
        gui_Box_Layout_Y.setName("Box_Layout_Y");
        addComponent(gui_Box_Layout_Y);
        gui_firstName.setHint("First Name");
                gui_firstName.setInlineStylesTheme(resourceObjectInstance);
        gui_firstName.setName("firstName");
        gui_lastName.setHint("Last Name");
                gui_lastName.setInlineStylesTheme(resourceObjectInstance);
        gui_lastName.setName("lastName");
        gui_email.setHint("Email");
                gui_email.setInlineStylesTheme(resourceObjectInstance);
        gui_email.setName("email");
        gui_email.setConstraint(com.codename1.ui.TextArea.EMAILADDR);
        gui_password.setHint("Password");
                gui_password.setInlineStylesTheme(resourceObjectInstance);
        gui_password.setName("password");
        gui_password.setConstraint(com.codename1.ui.TextArea.PASSWORD);
        gui_Picker.setText("Date Of birth");
                gui_Picker.setInlineStylesTheme(resourceObjectInstance);
        gui_Picker.setName("Picker");
        gui_Picker.setType(1);
        gui_Btn_Register.setText("Register");
                gui_Btn_Register.setInlineStylesTheme(resourceObjectInstance);
        gui_Btn_Register.setName("Btn_Register");
        gui_Btn_Login.setText("Login");
                gui_Btn_Login.setInlineStylesTheme(resourceObjectInstance);
        gui_Btn_Login.setName("Btn_Login");
        gui_Box_Layout_Y.addComponent(gui_firstName);
        gui_Box_Layout_Y.addComponent(gui_lastName);
        gui_Box_Layout_Y.addComponent(gui_email);
        gui_Box_Layout_Y.addComponent(gui_password);
        gui_Box_Layout_Y.addComponent(gui_Picker);
        gui_Box_Layout_Y.addComponent(gui_Btn_Register);
        gui_Box_Layout_Y.addComponent(gui_Btn_Login);
        ((com.codename1.ui.layouts.LayeredLayout)gui_Box_Layout_Y.getParent().getLayout()).setInsets(gui_Box_Layout_Y, "17.168482% 7.6923084% 44.30295% 7.302823%").setReferenceComponents(gui_Box_Layout_Y, "-1 -1 -1 -1").setReferencePositions(gui_Box_Layout_Y, "0.0 0.0 0.0 0.0");
    }// </editor-fold>

//-- DON'T EDIT ABOVE THIS LINE!!!
    public void onBtn_RegisterActionEvent(com.codename1.ui.events.ActionEvent ev) {
//        ServiceUser su = new ServiceUser();
//        User u =new User();
//        
//       u.setFirstName(gui_firstName.getText());
//       u.setLastName(gui_lastName.getText());
//       u.setEmail(gui_email.getText());
//       u.setPassword(gui_password.getText());
//       
//       String pattern = "yyyy-MM-dd";
//       SimpleDateFormat simpleDateFormat = new SimpleDateFormat(pattern);
//       String dateofbirth = simpleDateFormat.format(gui_Picker.getDate());
//       u.setDateOfBirth(dateofbirth);
//       
//       su.addUser(u);
//       Resources theme = UIManager.initFirstTheme("/themeCoHeal");
      // new LoginForm(theme).show();
    }

    public void onBtn_LoginActionEvent(com.codename1.ui.events.ActionEvent ev) {
        Resources theme = UIManager.initFirstTheme("/themeCoHeal");
        new LoginForm(theme).show();
    }
    
    

}
