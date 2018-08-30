package theme;

import org.junit.jupiter.api.Test;
import org.junit.jupiter.api.BeforeAll;

import theme.dark.DarkThemeFactory;
import theme.light.LightDialog;
import theme.light.LightFooter;
import theme.light.LightThemeFactory;
import theme.light.LightToolbar;

import static org.junit.jupiter.api.Assertions.assertTrue;

class LightThemeFactoryTest {

    private ThemeFactory lightThemeFactory = new LightThemeFactory();

    @Test
    void should_receive_light_dialog() {
        assertTrue( lightThemeFactory.createDialog() instanceof LightDialog );
    }

    @Test
    void should_receive_light_toolbar() {
        assertTrue( lightThemeFactory.createToolbar() instanceof LightToolbar );
    }

    @Test
    void should_receive_light_footer() {
        assertTrue( lightThemeFactory.createFooter() instanceof LightFooter );
    }

}
